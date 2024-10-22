#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char letra;
	
	printf("Introduza um carater qualquer \n");
	scanf("%c",&letra);
	
	printf("\n");
	printf("O carater introduzido foi %c \n",letra);
	
	system("pause");
}
