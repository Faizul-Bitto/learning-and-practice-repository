import random

secret_random_number = random.randint(1, 99)
print(" I am thinking of a number between 1 and 99...")



guess = int(input("Enter a guess : "))

while guess != secret_random_number:
    if guess < secret_random_number:
        print("Your guess is too low")
    elif guess > secret_random_number:
        print("Your guess is too high") 
    
    print(" ")    
    guess = int(input("Enter a guess : "))    


    
print("Congrats! The number was: " + str(secret_random_number))    