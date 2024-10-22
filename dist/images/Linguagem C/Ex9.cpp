#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int a;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	
	printf("\n");
	printf("O valor inserido foi %d \n",a);
	
	system("pause");
}
