function isPrimeNumber(value) {
  let isPrime = false;
  let result = '';
  if ((!isNaN(value) || Array.isArray(value)) && value !== '') {
    value = !Array.isArray(value) ? [value] : value;
    result = (value.length === 0 ? 'Массив пуст' : '');
    if (value.join() === value.filter(Number).join()) {
      value.forEach(number => {
        for (let i = 2; i <= number; i++) {
          isPrime = true;
          for (let j = 2; j < i; j++) {
            if (i % j === 0) {
              isPrime = false;
              break;
            }
          }
        }
        result = result + 'Результат: ' + (isPrime ? `${number} is` : `${number} is not`) + ' prime number\n';
      });
    } else {
      result = 'Элемент массива не число';
    }
  } else {
    result = 'Значение не введено или не является числом или массивом';
  }
  return result;
}