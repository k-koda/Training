public class Car {
  int number;
  int length;
  
  public Car(int n, int l) {
    number = n;
    length = l;

    System.out.println("ナンバーが"+number+"、大きさが"+length+"mの車を作成しました。");
  }

  public void showNumber() {
    System.out.println(number);
  }

  public int getLength() {
    return length;
  }

  public void argExample(int n) {
    System.out.println("引数nの値は"+n+"です。");
  }

  public static void showClass() {
    System.out.println("車クラスです。");
  }

}
