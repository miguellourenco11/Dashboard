#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int a,b,c;
	
	printf("Introduza um valor \n");
	scanf("%d",&a);
	printf("Introduza um valor \n");
	scanf("%d",&b);
	printf("Introduza um valor \n");
	scanf("%d",&c);
	
	printf("\n");
	printf("A m�dia dos tr�s valores � %.2f \n",(a+b+c)/(float)3);
	
	system("pause");
}
