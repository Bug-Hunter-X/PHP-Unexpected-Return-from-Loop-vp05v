function myFunc() {
  for ($i = 0; $i < 10; $i++) {
    //some code that causes an error
    if ($i == 5) {
      break; //Use break to exit the loop instead of return
    }
    echo $i;
  }
}