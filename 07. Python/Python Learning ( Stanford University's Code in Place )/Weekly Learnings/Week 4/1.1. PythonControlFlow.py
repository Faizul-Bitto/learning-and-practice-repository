import math

K = -8266.64

def main():
    calculate_age_single_sample()
    
    
def calculate_age_single_sample():
    # ask the user to input the percentage of C14 left in their fossil sample
    percent_left = float(input("% of natural C14: "))   
    # calcualate the age of that fossil
    age = K * math.log(percent_left / 100)
    # print the result
    print("Sample is " + str(age) + " years old.")   
    
    
if __name__ == '__main__':
    main()  