#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char origem[50];
	
	printf("introduza uma string \n");
	scanf("%s",&origem);
	
	printf("O resultado da fun��o strlen � %d \n",strlen(origem));
	printf("O resultado da fun��o strlwr � %s \n",strlwr(origem));
	printf("O resultado da fun��o strupr � %s \n",strupr(origem));
	
	printf("\n");	
	system("pause");
}
