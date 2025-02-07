function myFunc() {
  for ($i = 0; $i < 10; $i++) {
    //some code that causes an error
    if ($i == 5) {
      return;
    }
    echo $i;
  }
}