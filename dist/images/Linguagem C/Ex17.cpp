#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int b,h;
	
	printf("Introduza a base do triângulo \n");
	scanf("%d",&b);
	printf("Introduza a altura do triângulo \n");
	scanf("%d",&h);
	
	printf("\n");
	printf("A área do triângulo é %.2f \n",b*h/(float)2);
	
	system("pause");
}
