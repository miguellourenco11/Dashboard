#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	char frase[50];
	
	printf("introduza uma frase \n");
	scanf("%[^\n]s",&frase);
	
	printf("A frase em minusculas é %s \n",strlwr(frase));
	printf("A frase em maiusculas é %s \n",strupr(frase));
	
	printf("\n");	
	system("pause");
}
