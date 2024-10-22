#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	//estrutura de repetição Do While
	
	int i=0;
	
	do
	{
		printf("%d \n", i);
		i=i+1;
	} while (i<=10); //Continua se verdadeiro!!
	
	printf("\n");	
	system("pause");
}
