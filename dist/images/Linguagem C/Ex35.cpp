#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	//estrutura de repetição For
	
	int i;

 	for (i=0;i<10;i++)
	{
		printf("%d \n",i);
	}
	
	printf("\n");	
	system("pause");
}
