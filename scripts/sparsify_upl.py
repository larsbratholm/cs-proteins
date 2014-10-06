### Reduce a set of restraints to a subset of representatives.
# Non redundant will only keep the shortest distance between two residues. Sparse will create a reduced set of representative restraints.
# Usage: python sparsify_upl.py filename.upl


import sys
import numpy as np




#upl file
data = open(sys.argv[1],"r").readlines()

noe_clusters = {}
#if distance in sequence between an item from two different clusters is below r, then merge them.
#r = 2,3,4 (sparse), r = 1 (non_redundant)
r = 2

#list with all pairs
pair_list = []

for line in data:
    tokens = line.split()
    if tokens[0][0] == "#":
        continue
    res_1 = int(tokens[0])
    res_2 = int(tokens[3])
    distance = float(tokens[-1])
    pair = [res_1,res_2]
    pair.sort()
    pair.append(distance)
    pair_list.append(pair)

#contains all the clusters
d = {}

used_pairs = []
for index_1, pair_1 in enumerate(pair_list[:]):
    id = len(d)
    if index_1 not in used_pairs:
        d[id] = [index_1]
        iterate = True
        while iterate:
            iterate = False
            new_pairs = []
            used_pairs = []
            for x in range(id+1):
                used_pairs += d[x]
            for index_i in d[id]:
                for index_2, pair_2 in enumerate(pair_list):
                    if abs(pair_list[index_i][0]-pair_2[0]) < r and abs(pair_list[index_i][1]-pair_2[1]) < r and index_2 not in used_pairs and index_2 not in new_pairs:
                        new_pairs.append(index_2)
                        iterate = True
            d[id]+=new_pairs

#only most essential pairs are kept
for cluster in d.values():
    used_restraints_from_cluster = []
    sub_cluster_1 = []
    sub_cluster_2 = []
    min_res_1 = min([pair_list[id][0] for id in cluster])
    min_res_2 = min([pair_list[id][1] for id in cluster])
    max_res_1 = max([pair_list[id][0] for id in cluster])
    max_res_2 = max([pair_list[id][1] for id in cluster])
    # subclusters contain the outermost pairs.
    for id in cluster:
        if pair_list[id][0] == min_res_1 or pair_list[id][1] == min_res_2:
            sub_cluster_1.append(id)
        if pair_list[id][0] == max_res_1 or pair_list[id][1] == max_res_2:
            sub_cluster_2.append(id)
    min_dist_1 = np.inf
    min_dist_pair_id_1 = 0
    min_dist_2 = np.inf
    min_dist_pair_id_2 = 0
    # only the shortest distance in each subcluster is kept (total of 2 restraints)
    for id in sub_cluster_1:
        if pair_list[id][2] < min_dist_1:
            min_dist_1 = pair_list[id][2]
            min_dist_pair_id_1 = id
    for id in sub_cluster_2:
        if pair_list[id][2] < min_dist_2:
            min_dist_2 = pair_list[id][2]
            min_dist_pair_id_2 = id
    # only use one pair if they are less than two residues apart
    if (pair_list[min_dist_pair_id_1][0] - pair_list[min_dist_pair_id_2][0]) < 2 or (pair_list[min_dist_pair_id_1][1] - pair_list[min_dist_pair_id_2][1]) < 2:
        used_restraints_from_cluster.append(min_dist_pair_id_1)
    else:
        used_restraints_from_cluster.append(min_dist_pair_id_1)
        used_restraints_from_cluster.append(min_dist_pair_id_2)
    # If two restraints in the cluster are further away than 9 residues, add a restraint in between them.
    if (max_res_1 - min_res_1) > 9 or (max_res_2 - min_res_2) > 9:
        middle_res_1 = (max_res_1 + min_res_1)/2
        middle_res_2 = (max_res_2 + min_res_2)/2
        min_dist_middle = np.inf
        min_dist_pair_id_middle = 0
        for id in cluster:
            current_min_dist = (pair_list[id][0] - middle_res_1)**2 + (pair_list[id][1] - middle_res_2)**2
            if current_min_dist < min_dist_middle:
                min_dist_middle = current_min_dist
                min_dist_pair_id_middle = id
        used_restraints_from_cluster.append(min_dist_pair_id_middle)
    
    # print the final restraints
    for id in used_restraints_from_cluster:
        print data[id][:-1]

