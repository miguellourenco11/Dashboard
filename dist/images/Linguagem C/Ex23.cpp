#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int num;
	
	printf("Introduza um valor \n");
	scanf("%d",&num);
	
	printf("\n");
	
	if (num % 2==0)
		printf("O valor � par");
	else 
		printf("O valor � �mpar");
	
	printf("\n");	
	system("pause");
}
