#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int b,h;
	
	printf("Introduza a base do tri�ngulo \n");
	scanf("%d",&b);
	printf("Introduza a altura do tri�ngulo \n");
	scanf("%d",&h);
	
	printf("\n");
	printf("A �rea do tri�ngulo � %.2f \n",b*h/(float)2);
	
	system("pause");
}
