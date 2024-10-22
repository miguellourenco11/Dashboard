#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int i;
	
 	for (i=10;i>=0;i--)
 	{
 		printf("%d \n",i);
	} 
	
	printf("\n");	
	system("pause");
}
