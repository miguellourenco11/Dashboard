#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include <math.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int num;
		
	printf("introduza um n�mero \n");
	scanf("%d",&num);
	
	if(num % 2==0)
		printf("O n�mero � par");
	else
		printf("O n�mero � �mpar");
	
	printf("\n");	
	system("pause");
}
