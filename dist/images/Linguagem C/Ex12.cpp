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
	printf("O dobro do primeiro valor é %d \n",a*2);
	printf("O quadrada do segundo valor é %d \n",b*b);
	
	system("pause");
}
