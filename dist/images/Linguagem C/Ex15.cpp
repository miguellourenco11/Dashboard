#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int c,l;
	
	printf("Introduza o comprimento de um retângulo \n");
	scanf("%d",&c);
	printf("Introduza a largura de um retângulo \n");
	scanf("%d",&l);
	
	printf("\n");
	printf("A área do retângulo é %.2f \n",c*(float)l);
	
	system("pause");
}
