<? php

begin
var 
 M = array(array()), n=0;
 print("Введите размерность двумерного массива: ");
 get(n);
  for (int i = 0; i < n; i++ )
  	for (int j = 0; j < n; j++ )
  	{  
      print("Введите M["+i+"]["+j+"] элемент: ");
      if (get(M[i][j])!=0) 
      	{
      		print("Ошибка!");
      		j--;
      	}
  	}
print("Вычитаем последнюю строку из каждой строки... ");
print("Результат=> ");
for (int i=0; i < n-1; i++) 
  {
	for (int j = 0; j < n; j++ )
	{
	 	M[i][j] = M[n][j] - M[i][j];
	 	print(M[i][j]+" ");
	}
	print("\n");
  }
  end.