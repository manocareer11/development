select * from isSheet3

select *  from is_store_detail where state=''



-- --sheet1 begin

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],HQ,[Store Telephone Number],[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where HQ is not NULL)

--GO
--insert into is_store_detail(code,shortBrandName,land_line,email,store_address,city,state,location,brand)
--(select [New Code],'SC',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location,''  from isSheet1 where 
--SCM is not NULL or SCH is not NULL or sck is not null )

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'IN',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where [IN] is not NULL)

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'UR',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where [UR] is not NULL)

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'JM',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where JM is not NULL)

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'UY',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where UY is not NULL)

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'JEL',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where JEL is not NULL)

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'CONV',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where CONV  is not NULL)

--GO


--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'SCK',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where SCK  is not NULL)

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'OGIOV',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where OGIOV  is not NULL)

--GO

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [New Code],'LOM',isnull([Store Telephone Number],''),[STORE EMAIL - ID],[STORE ADDRESS],CITY,'',Location  from isSheet1 where LOM  is not NULL)

--Go

-- sheet1 end

---- sheet2 begin
--insert into is_store_detail(code,shortBrandName,land_line,email,store_address,city,state,location,brand)
--(select [Code],Format,isnull([Store Landline Number],''),[Store Email Address],[STORE ADDRESS],City,'',Location,''  from isSheet2)
---- sheet2 end

--Go

---- sheet3  begin
	
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'SCM',[Telephone],[email],[Address],City,'',''  from isSheet3 where SCM is not NULL )
--Go

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'SCH',[Telephone],[email],[Address],City,'',''  from isSheet3 where   SCH is not NULL )
--Go

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'IN',[Telephone],[email],[Address],City,'',''  from isSheet3 where [IN] is not NULL)
--Go

--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'UR',[Telephone],[email],[Address],City,'',''  from isSheet3 where UR is not NULL)
--GO
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'DH',[Telephone],[email],[Address],City,'',''  from isSheet3 where DH is not NULL )
--Go
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'JM',[Telephone],[email],[Address],City,'',''  from isSheet3 where JM is not NULL)
--GO
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'UY',[Telephone],[email],[Address],City,'',''  from isSheet3 where UY is not NULL)
--GO
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'J21',[Telephone],[email],[Address],City,'',''  from isSheet3 where J21 is not NULL)

--Go
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'MU',[Telephone],[email],[Address],City,'',''  from isSheet3 where MU is not NULL)
--GO
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'SCK',[Telephone],[email],[Address],City,'',''  from isSheet3 where SCK is not NULL)
--GO
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'Conv',[Telephone],[email],[Address],City,'',''  from isSheet3 where Conv is not NULL)

--GO
--insert into is_store_detail(code,brand,land_line,email,store_address,city,state,location)
--(select [Code],'Gion',[Telephone],[email],[Address],City,'',''  from isSheet3 where Gion is not NULL)

---- sheet2 end