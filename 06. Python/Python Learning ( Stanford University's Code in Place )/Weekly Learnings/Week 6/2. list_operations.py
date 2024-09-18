# my_list.append(42)
# my_list.append(100)
# my_list.append(28)

# appneding will add element in the list at the end always

# my_list.pop()
# will remove the last element in the list, from the end always 28 -> 100 -> 42


my_list = [1, 42, 3, 4]
if 42 in my_list:
    print("List has element")
else:
    print("List has not this element")

my_list = [1, 2, 3, 4]
if 42 in my_list:
    print("List has element")
else:
    print("List has not this element")


# now below: both doing the same thing, but the major difference is , first loop is working with index,as there is "i" and next loop is directly working on elements, based on criteria, we can do any loop below, if we need to know the positions of the elements, then go for first one, if not , then go for second

numbers = [1, 2, 3, 4]
for i in range(len(numbers)):
    elem = numbers[i]
    print(elem)

numbers = [1, 2, 3, 4]
for elem in numbers:
    print(elem)
