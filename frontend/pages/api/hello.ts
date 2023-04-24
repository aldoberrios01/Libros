// Next.js API route support: https://nextjs.org/docs/api-routes/introduction
import type { NextApiRequest, NextApiResponse } from 'next'

type Data = {
  name: string
}

export default function handler(
  req: NextApiRequest,
  res: NextApiResponse<Data>
) {
  fetch('http://web_server/api-books/books')//'https://jsonplaceholder.typicode.com/posts')
  .then( e => e.json() )
  .then( e => {
    console.log(e);
    res.status(200).json(e)
  } )
  .catch(e => console.error(e)) 
}
