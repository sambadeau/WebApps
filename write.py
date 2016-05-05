import csv
def run():
    category = []
    food = []
    calories = []
    with open('dunkin.csv', 'rb') as f:
        reader = csv.reader(f)
        for row in reader:
            category.append(str(row[0]))
            food.append(str(row[2]))
            calories.append(str(row[4]))
    file = open("dunkin.sql","w")

    for i in range(0,len(category)):
        var = str(category[i])
        var2 = str(food[i])
        var3 = str(calories[i])
        #file.write("INSERT INTO `hwangmn`.`food` (`Food`, `Calories`, `Type`) VALUES ('"+ var + "','" + var2 + "', 'Dinner');\n")
        #file.write("INSERT INTO `hwangmn`.`chipotle` (`food`, `calories`) VALUES ('" + var + "', '" + var2 + "');\n")
        #file.write("INSERT INTO `hwangmn`.`mcdonalds` (`food`, `calories`) VALUES ('" + var + "', '" + var2 + "');\n")
        file.write("INSERT INTO `hwangmn`.`dunkin` (`Food`, `Calories`, `Type`) VALUES ('"+ var2 + "', '" + var3 + "', '" + var +"');\n")
run()
