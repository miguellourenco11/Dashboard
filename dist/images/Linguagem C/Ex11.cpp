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
	printf("A subtração dos dois valores é %d \n",a-b);
	printf("A multiplicação dos dois valores é %d \n",a*b);
	printf("A divisão dos dois valores é %.2f \n",a/(float)b);
	
	system("pause");
}
