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
	
 	for (i=0;i<=10;i++)
 	{
 		printf("%d x %d = %d \n", valor,i,valor*i);
	} 
	
	printf("\n");	
	system("pause");
}
