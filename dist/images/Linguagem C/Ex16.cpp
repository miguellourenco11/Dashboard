#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int B,b,h;
	
	printf("Introduza a base do trap�zio \n");
	scanf("%d",&B);
	printf("Introduza outra base do trap�zio \n");
	scanf("%d",&b);
	printf("Introduza a altura do trap�zio \n");
	scanf("%d",&h);
	
	printf("\n");
	printf("A �rea do trap�zio � %.2f \n",((B+b)*h)/(float)2);
	
	system("pause");
}
