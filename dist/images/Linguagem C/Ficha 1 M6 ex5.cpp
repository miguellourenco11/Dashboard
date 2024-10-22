#include <stdio.h>
#include <locale.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

main()
{
	setlocale(LC_ALL, "Portuguese");
	
	float temp1,temp2,temp3;
	
	printf("Introduza três valores de temperaturas \n");
	scanf("%f" "%f" "%f",&temp1,&temp2,&temp3);
	
	float max=0;
	float min=1000;
	
	if(temp1<temp2 && temp2<temp3)
	{
		max=temp3;
		min=temp1;
	}
	
	if(temp1<temp3 && temp3<temp2)
	{
		max=temp2;
		min=temp1;
	}
	
	if(temp2<temp1 && temp1<temp3)
	{
		max=temp3;
		min=temp2;
	}
	
	if(temp2<temp3 && temp3<temp1)
	{
		max=temp1;
		min=temp2;
	}
	
	if(temp3<temp2 && temp2<temp1)
	{
		max=temp1;
		min=temp3;
	}
	
	if(temp3<temp1 && temp1<temp2)
	{
		max=temp2;
		min=temp3;
	}
	
	float AT;
	
	AT=max-min;

	printf("A amplitude térmica é %.2f \n",AT);
	
	system("pause");
}
