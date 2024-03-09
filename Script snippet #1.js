function printNumberPyramid(height) {
  for (let i = 1; i <= height; i++) {
    let row = '';

    // Create the spacing for the left side of the pyramid
    for (let j = 1; j <= height - i; j++) {
      row += ' ';
    }

    // Create the number sequence for the pyramid
    for (let j = 1; j <= i; j++) {
      row += j + ' ';
    }

    console.log(row);
  }
}
printNumberPyramid(9)