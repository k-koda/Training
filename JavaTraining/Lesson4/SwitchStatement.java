public class SwitchStatement {
  public static void main(String[] args) {
    int num=6;
    switch (num) {
      case 1:
        System.out.println("numの値は1です。");
        break;
      case 2:
        System.out.println("numの値は2です。");
        break;
      case 3:
        System.out.println("numの値は3です。");
        break;
      case 4:
        System.out.println("numの値は4です。");
        break;
      case 5:
        System.out.println("numの値は5です。");
        break;
      default:
        System.out.println("numの値は1,2,3,4,5以外の値です。");
    }
  }
}
