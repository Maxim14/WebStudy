<? php
/** Дана квадратная матрица. Вычесть последнюю строку из каждой строки  */
var 
    M = array(5), cnt=0, trcnt=0,
    Tree= array(M), k=0;
    L=0, p=0, q=0, x=0,
    i=0, k=0, Lrez=0;

  while(get=="next")
  {
    c=0;
    print("Высота дерева №"+(trcnt+1));
  	L= Get(Tree[trcnt][c]); c++;
  	print("Процент прироста в четный год: ");
    p= Get(Tree[trcnt][c]); c++;
    print("Процент прироста в нечетный год: ");
    q= Get(Tree[trcnt][c]); c++;
    research(Tree[trcnt][c]);
    trcnt++;
  }
print("Конечный прирост дерева: ");
get(x);
 for (int j = trcnt; j<0; j--)
{   
	if (j==0) break;
	if (Tree[j][3]<Tree[j-1][3]) L=Tree[j][4]
	else L=Tree[j-1][4];
}
print("Год миниального прироста: "+ L);
end.

function research(&X[o])
{
if ((X[o][0] < 0 ) || (X[o][1] < 0) || (X[o][2] < 0))
 {
 	print("Ошибка данных!");
 	exit;
 }
 i = 2010;
while(k < x)
{
  if (o % 2 == 0)
  {
    k = (p * X[o][0] / 100);
	X[o][0] = X[o][0] + k;
  } 
  else
  {
    k=(q*X[o][0]/100);
	X[o][0]=X[o][0]+k;
  }
  o++;
}
X[i][3]=k;
X[i][4]=0;
}
?>
