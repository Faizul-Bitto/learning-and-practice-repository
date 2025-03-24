const msg = "Hello";
const year = "2024";

const person = {
  name: "John",
  age: 30,
  tasks: ["Coding", "Reading", "Gaming"],
};
function getDate() {
  const date = new Date();

  return date.toLocaleDateString();
}

// exporting the variables defined in this file
export { msg, year, person, getDate };
