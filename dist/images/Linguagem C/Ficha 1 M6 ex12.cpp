#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int valor1,valor2;
	
	printf("Introduza dois valores inteiros \n");
	scanf("%d" "%d",&valor1,&valor2);
	
	printf("\n");
	
	for(int i=valor1; i<=valor2; i++)
	{
		if(i % 2==0)
			printf("%d ",i);	
	}

	printf("\n");
	system("pause");
}
