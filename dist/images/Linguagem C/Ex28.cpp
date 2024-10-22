#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char palavra[30];
	
	printf("Introduza a string! \n");
	scanf("%s",&palavra);
	
	printf("A palavra em maíusculas é %s \n",strupr(palavra));
	
	printf("\n");	
	system("pause");
}
