const inputArray = {
  // food:/^$/,
  amount: /^\d{1,3}$/,
};

const formInputSelector = document.querySelectorAll('form>input');

formInputSelector.forEach((eachInput) => {
  eachInput.addEventListener('keyup', (element) => {
    // console.log(element.target.attributes.name.value);
    var regex = inputArray[element.target.attributes.name.value];
    var inputVal = element.target;
    verifyInput(regex, inputVal);
  });
});
function verifyInput(regex, inputVal) {
  // console.log(`${regex} and ${inputVal.value} are the values`);
  var valid = regex.test(inputVal.value);
  if (valid) {
    inputVal.classList = 'valid';
  } else {
    inputVal.classList = 'invalid';
  }
}
