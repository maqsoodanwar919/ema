import React from 'react'

export const Header = (p,children) => {
   let {obj} = p;
   console.log(obj);
  return (
    <div> 
       <small> Wellcome To Header Section</small>
       {p.children}
    </div>
  )
}
