#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	//estrutura de repetição while
	
	int i=0;
	
	while (i<=50) //Entra se verdadeiro!!
	{
		printf("%d \n", i);
		i=i+1;
	}
	
	printf("\n");	
	system("pause");
}
