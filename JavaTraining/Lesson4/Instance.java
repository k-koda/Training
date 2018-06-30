class Car {
  private static int productionVolume;
  private int number;
  private int length;

  Car(int n, int l) {
    number = n;
    length = l;

    productionVolume++;
  }

  public static void showProductionVolume() {
    System.out.println("現在の累計生産台数は"+productionVolume+"です。");
  }
  
  public int getNumber() {
      return number;
  }
  public int getLength() {
      return length;
  }

  public void setLength(int l) {
      length = l;
  }
}
public class Instance {
  public static void main(String[] args) {
    //Car car = new Car(1234, 5);

    //car.showNumber();

    //int carLength = car.getLength();
    //System.out.println("carの大きさは" + carLength +"mです。");

    //car.argExample(10);

    //Car.showClass();

    //System.out.println("carの大きさは" + car.length +"mです。");
    //car.length=10;
    //System.out.println("carの大きさは" + car.length +"mです。");
    //System.out.println("carの大きさは" + car.getLength() +"mです。");
    //car.setLength(10);
    //System.out.println("carの大きさは" + car.getLength() +"mです。");
    new Car(1234, 5);
    new Car(5678, 9);
    Car.showProductionVolume();

    new Car(9876, 5);
    Car.showProductionVolume();
  }
}
