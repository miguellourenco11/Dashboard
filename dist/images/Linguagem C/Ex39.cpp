#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int i;
	
 	for (i=50;i>=2;i=i-2)
 	{
 		printf("%d \n",i);
	} 
	
	printf("\n");	
	system("pause");
}
