#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int valor;
	
	printf("Introduza um valor \n");
	scanf("%d",&valor);
	
	printf("\n");
	
	int i=0;
	
 	do
 	{
 		printf("%d x %d = %d \n", valor,i,valor*i);
		i=i+1;
	} while (i<=10);
	
	printf("\n");	
	system("pause");
}
