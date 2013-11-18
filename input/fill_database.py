import csv
from input.models import History
with open('bcdb/Data_treatements.csv', 'rb') as csvfile:
	reader = csv.reader(f)
	for row in reader:

file= open("bcdb/Data_treatements.csv")
treatmentdata= []
for line in file.readlines()[1:]:
	rawdata=[value for value in line.split()]
	treatmentdata.append(rawdata)
file.close()

for i in range(treatmentdata):
	treatmentdata = History()
	Name = treatmentdata[i][0]
	Types of treatment = treatmentdata[i][1]
	Sex = treatmentdata[i][2]
	Reccurence = treatmentdata[i][3]
	Menopausal status = treatmentdata[i][4]
	Tissue status = treatmentdata[i][5]
	Stage = treatmentdata[i][6]
	Inflammatory status = treatmentdata[i][7]
	Mestastatic status = treatmentdata[i][8]
	ER = treatmentdata[i][9]
	HER2 = treatmentdata[i][10]
	NEU2 = treatmentdata[i][11]
	Tumor size = treatmentdata[i][12]
	Mamaprint score = treatmentdata[i][13]
	Oncotype DX score = treatmentdata[i][14]