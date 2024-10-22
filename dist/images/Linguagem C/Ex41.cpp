#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

#define pi 3.1415

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	float r;

	printf("introduza o raio da esfera \n");
	scanf("%f",&r);
	
	printf("A área da esfera é %.2f \n",4*pi*(r*r));
	
	printf("\n");	
	system("pause");
}
