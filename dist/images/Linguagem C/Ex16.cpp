#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int B,b,h;
	
	printf("Introduza a base do trapézio \n");
	scanf("%d",&B);
	printf("Introduza outra base do trapézio \n");
	scanf("%d",&b);
	printf("Introduza a altura do trapézio \n");
	scanf("%d",&h);
	
	printf("\n");
	printf("A área do trapézio é %.2f \n",((B+b)*h)/(float)2);
	
	system("pause");
}
