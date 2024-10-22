#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char frase[500];
	
	printf("Introduza a string! \n");
	scanf("%[^\n]s",&frase);
	
	printf("A frase em maíusculas é \n %s \n",strupr(frase));
	
	printf("\n");	
	system("pause");
}
