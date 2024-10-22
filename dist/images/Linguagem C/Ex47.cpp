#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	int par;
	
	srand(time(NULL)); //=randomize
	
	for (int i=1; i<=100; i++)
	{
		int num=rand()%100;
		if(num % 2==0)
		{
			par++;
			printf("%d \n",num);
		}
	}
	
	printf("foram gerados %d números pares \n",par);
	printf("\n");	
	system("pause");
}
