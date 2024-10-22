#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");

	srand(time(NULL)); //=randomize
	
	for (int i=1; i<=100; i++)
	{
		int num=rand()%100;
		if(num % 2==0)
			printf("%d \n",num);
	}
	
	printf("\n");	
	system("pause");
}
