// Next.js API route support: https://nextjs.org/docs/api-routes/introduction
import type { NextApiRequest, NextApiResponse } from 'next'

type Data = {
  name: string
}

export default function handler(
  req: NextApiRequest,
  res: NextApiResponse<Data>
) { 
  fetch('http://books_service:8000/api/books')//'https://jsonplaceholder.typicode.com/posts')
  .then( e => e.json() )
  .then( e => {
    console.log(e);
    res.status(200).json(e)
  } )
  .catch(e => console.error(e)) 
}
