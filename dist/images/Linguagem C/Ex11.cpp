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
	printf("A soma dos dois valores � %d \n",a+b);
	printf("A subtra��o dos dois valores � %d \n",a-b);
	printf("A multiplica��o dos dois valores � %d \n",a*b);
	printf("A divis�o dos dois valores � %.2f \n",a/(float)b);
	
	system("pause");
}
