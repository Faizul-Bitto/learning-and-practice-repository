list_of_nums = [42, 37, 28, 2]

names = ["Brahm", "waymond", "Gwen"]

empty_list = []

first_element = names[0]  # Brahm
third_element = names[2]  # Gwen
last_element = names[-1]  # Gwen

num_names = len(names)  # to get the length of the list 'names' : 3


# make a double of this list
numbers = [1, 2, 3, 4]

for i in range(len(numbers)):
    elem_at_index = numbers[i]
    numbers[i] = 2 * elem_at_index

print(numbers)
