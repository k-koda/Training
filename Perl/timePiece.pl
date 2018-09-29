use Time::Piece;

my $datetime_mysql = '2018-09-13 21:39:10';
my $t = Time::Piece->strptime($datetime_mysql, '%Y-%m-%d %H:%M:%S');

my $mt=$t->strftime('%Y%m%d');
print "$mt\n";

my $dt=$t->strftime('%H');
print "$dt\n";
