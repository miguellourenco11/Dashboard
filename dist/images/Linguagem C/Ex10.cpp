#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int a,b;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	
	printf("Introduza um valor \n");
	scanf("%d",&b);
	
	printf("\n");
	printf("A soma dos dois valores é %d \n",a+b);
	
	system("pause");
}
