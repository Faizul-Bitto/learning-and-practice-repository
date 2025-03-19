def main():
    print("This program adds two numbers.")
    num1 = int(input("Enter First Number:"))
    num2 = int(input("Enter Second Number:"))
    
    total = (num1 + num2)
    
    print("The total is : " + str(total) + ".")
    
if __name__ == '__main__':
    main()     

# Notes ->
#     1. = this is not equal sign, this is actually an assignment sign, x = 10, that means, 10 is assigned in x
#     2. Can name a python starting with _
#     3. Case sensitive : Hello and hello, not same
#     4. Be descriptive with variable naming, give a meaningfull full name, not like a random a, b. c. d......etc.
#     5. Should be in snake case : number_of_studetns
#     6. Variables are like suitcases, where the value can be stored. When we store information in a variable, it becomes a Python object, Think about a Python object as a suitcase stored in the computer's memory (RAM). These suitcases store value and hold the datatypes as well by default.
#     7. number_of_studetns -> SUITCASE -> Storing 700 -> [SUITCASE:700] -> This suitcase by defualt know the data type its carrying. like 700 is integer. but 700.0 -> no longer int, its a float -> Just a single decimal, even its 0 after decimal(.) -> its float in python